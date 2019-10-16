- https://github.com/AliyunContainerService/k8s-for-docker-desktop

## mac
Kubernetes: v1.14.6
Engine: 19.03.2
Compose: 1.24.1

## 切换Kubernetes运行上下文
kubectl config use-context docker-desktop
## 验证 Kubernetes 集群状态
kubectl cluster-info
kubectl get nodes
## 部署 Kubernetes dashboard
kubectl apply -f https://raw.githubusercontent.com/kubernetes/dashboard/v1.10.1/src/deploy/recommended/kubernetes-dashboard.yaml
## 开启 API Server 访问代理
kubectl proxy
## 通过如下 URL 访问 Kubernetes dashboard
http://localhost:8001/api/v1/namespaces/kube-system/services/https:kubernetes-dashboard:/proxy/#!/overview?namespace=default
## 配置 kubeconfig (可跳过)
TOKEN=$(kubectl -n kube-system describe secret default| awk '$1=="token:"{print $2}')
kubectl config set-credentials docker-desktop --token="${TOKEN}"

## command+shift+.  显示隐藏文件选择kubeconfig
